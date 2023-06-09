/**
 * This file is part of Aion-Lightning <aion-lightning.org>.
 *
 *  Aion-Lightning is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  Aion-Lightning is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details. *
 *  You should have received a copy of the GNU General Public License
 *  along with Aion-Lightning.
 *  If not, see <http://www.gnu.org/licenses/>.
 */



package com.aionemu.packetsamurai.utils;

import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;
import java.util.List;
import java.util.SortedMap;
import java.util.TreeMap;
import java.util.Map.Entry;

import com.aionemu.packetsamurai.PacketSamurai;
import com.aionemu.packetsamurai.parser.datatree.ValuePart;
import com.aionemu.packetsamurai.session.DataPacket;

/**
 * @Original author ATracer - Kamui
 */

/**
 * @author editor Magenik
 */

public class NpcStateExporter
{
	private List<DataPacket> packets;
	private String sessionName;
	private SortedMap<String, String> npcIdTitleMap = new TreeMap<String, String>();

	public NpcStateExporter(List<DataPacket> packets, String sessionName) 
	{
		super();
		this.packets = packets;
		this.sessionName = sessionName;
	}

	public void parse()
	{
		String fileName = "npc_states_" + sessionName + ".xml";

		try
		{
			String file = "output/Npc_State/"+fileName;
			BufferedWriter out = new BufferedWriter(new FileWriter(file));

			for(DataPacket packet : packets)
			{
				String name = packet.getName();
				if("SM_NPC_INFO".equals(name))
				{
					String npcId = "";
					String npcMode = "";

					List<ValuePart> valuePartList = packet.getValuePartList();

					for(ValuePart valuePart : valuePartList)
					{
						String partName = valuePart.getModelPart().getName();
						if("npcId".equals(partName))
						{
							npcId = valuePart.readValue();
						}
						else if("npcMode".equals(partName))
						{
							npcMode = valuePart.readValue();
						}
					}
					if(!"65".equals(npcMode))
					{
						npcIdTitleMap.put(npcId, npcMode);
					}
				}
			}

			for(Entry<String, String> entry : npcIdTitleMap.entrySet())
			{
				out.write("<info npcid=\"" + entry.getKey() + "\" stateid=\"" + entry.getValue() + "\" />\n");
			}
			out.close();
		}
		catch (IOException e)
		{
			e.printStackTrace();
		}
		if (!npcIdTitleMap.isEmpty())
			PacketSamurai.getUserInterface().log("Export [NpcState] - NPC States Has Been Written Successful");
	}
}
